#!/usr/bin/env bash
# cleanup-unused-docs-images.sh
# Deletes docs images (and their .meta sidecar files) that are not
# referenced by any article in content/collections/docs/default/
#
# Run from the project root:  bash tools/cleanup-unused-docs-images.sh
# Add --dry-run to preview without deleting anything.

set -euo pipefail

DRY_RUN=false
if [[ "${1:-}" == "--dry-run" ]]; then
  DRY_RUN=true
  echo "DRY RUN — no files will be deleted"
  echo ""
fi

DOCS_DIR="public/files/docs"
CONTENT_DIR="content/collections/docs/default"

# Build list of referenced image paths from all doc articles
REFERENCED=$(grep -roh '/files/docs/[^"]*' "$CONTENT_DIR"/*.md 2>/dev/null | sort -u)

deleted_files=0
deleted_meta=0
freed_bytes=0

while IFS= read -r -d '' filepath; do
  # Get the path as it appears in content (/files/docs/...)
  rel="${filepath#public}"

  if ! echo "$REFERENCED" | grep -qF "$rel"; then
    size=$(stat -c%s "$filepath" 2>/dev/null || stat -f%z "$filepath" 2>/dev/null || echo 0)

    if $DRY_RUN; then
      echo "  would delete: $filepath"
    else
      rm "$filepath"
    fi

    freed_bytes=$((freed_bytes + size))
    deleted_files=$((deleted_files + 1))

    # Delete the .meta sidecar if it exists
    meta="${filepath}.yaml"
    meta_in_meta="$(dirname "$filepath")/.meta/$(basename "$filepath").yaml"

    for m in "$meta" "$meta_in_meta"; do
      if [[ -f "$m" ]]; then
        if $DRY_RUN; then
          echo "  would delete: $m"
        else
          rm "$m"
        fi
        deleted_meta=$((deleted_meta + 1))
      fi
    done
  fi
done < <(find "$DOCS_DIR" -type f ! -name "*.yaml" -print0)

# Clean up empty directories
if ! $DRY_RUN; then
  find "$DOCS_DIR" -type d -empty -delete
fi

freed_mb=$(awk "BEGIN {printf \"%.1f\", $freed_bytes / 1048576}")

echo ""
echo "Done."
echo "  Image files deleted : $deleted_files"
echo "  Meta files deleted  : $deleted_meta"
echo "  Space freed         : ${freed_mb} MB"
