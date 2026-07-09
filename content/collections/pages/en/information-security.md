---
id: 6bdd5bdd-1e0a-4f23-ba3d-92f64fea9bfd
origin: 797cd39d-4158-4acd-af50-a9b1dfaed133
title: 'Information Security Description'
page_builder:
  -
    id: tturva001
    type: article
    enabled: true
    article:
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: General
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Apprix Oy uses the "Hetzner Data Center Park Helsinki" data center located in Finland (Hetzner Online GmbH). Hetzner is one of Europe''s leading data center operators.'
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'The data center is certified in accordance with the ISO/IEC 27001 standard.'
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: Servers
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Physical Security'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'High-security server environment'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Video surveillance, electronic access control'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Cooling and backup power supply'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Network Security'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Multi-level secured connections'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Server Protection'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Protection against Denial-of-Service (DDoS) attacks'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Active firewall in place'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Only strictly selected ports are open'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'IP restrictions in place'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Vulnerability detection'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Intrusion prevention'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Antivirus protection'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Database intrusion prevention (e.g., SQL injection)'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Server Software Updates'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Automated updates'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Servers certified according to the "Common Criteria EAL2" information security standard'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Process for regular updating'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Server Management'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Centralized server management'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Access via VPN connection only'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Secure SSH/TLS connections available to designated Apprix administrators'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Regular Heartbeat-style server health checks'
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Software Developed by Apprix Oy'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Data Transmission Security'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'All traffic via the web interface is encrypted (HTTPS, SHA-256)'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Encryption is also enabled for other data transfers to the servers'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Data Backup and Recovery'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Source code is saved in version control'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Automated daily backups of database and application servers'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Retention period of 7 days back'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'One monthly backup retained backwards'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Synchronized copies of server disks provided by IAAS'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Easily executable manual backup for special situations'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Data restoration is regularly tested once per quarter'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Service Portability'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Upon agreement, the service can be installed on a compatible server (databases and software).'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Location of Service Data'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'The service and its data, including personal data and backups, are located in Finland in Hetzner AG’s data center'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'GDPR directive compliant'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Data is not transferred outside the EU region'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Data Deletion'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'When the service agreement ends, all data contained in the system is deleted from the server and backup servers.'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Security Audits of Services'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'The security of the service is audited by an external professional third party.'
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Service Administrators, Users, Roles, and Responsibilities'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Super Administrator:'
                  -
                    type: text
                    text: ' The person responsible for the specific service at Apprix Oy. Full access and control rights to all parts and data of the service.'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Customer Administrators:'
                  -
                    type: text
                    text: ' Access and control rights to the parts and data of the service created for them.'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Administrator Rights:'
                  -
                    type: text
                    text: ' Can grant restricted, role-based access rights. All user credentials are strictly personal; shared accounts are not used.'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Access Control:'
                  -
                    type: text
                    text: ' Access control based on user credentials and passwords in all systems.'
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Security-Related Agreements'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Non-Disclosure Agreement (NDA)'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Mutual obligation of confidentiality'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'A personal NDA signed with every Apprix employee handling customer data'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Data Processing Agreement (DPA)'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'EU General Data Protection Regulation (GDPR) compliant'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'DPA between Apprix Oy and Hetzner Online GmbH'
          -
            type: listItem
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Separate DPAs executed with customers'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Service Level Agreement (SLA)'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Defines support services, response times, and target SLA levels.'
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Supported Devices'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Apprix systems are accessible using modern web browsers.'
seo_title: 'Information Security Description | Apprix Oy'
seo_description: 'Apprix Oy information security description. We describe our information security principles, technical safeguards, and data processing practices.'
updated_by: 54f1c4c9-2642-4137-9504-e7b3042b847b
updated_at: 1783597405
---
