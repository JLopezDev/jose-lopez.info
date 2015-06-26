# Procedures for MEN stack.

### nginx config
    server {
        listen 80;
        server_name <project_url>;
        
        # FORGE SSL (DO NOT REMOVE!)
        # ssl_certificate;
        # ssl_certificate_key;

        ssl_protocols TLSv1 TLSv1.1 TLSv1.2;

        location = /favicon.ico { access_log off; log_not_found off; }
        location = /robots.txt  { access_log off; log_not_found off; }

        access_log off;
        error_log  /var/log/nginx/<project_url>-error.log error;

        location / {
            proxy_pass http://localhost:3000;
            proxy_http_version 1.1;
            proxy_set_header Upgrade $http_upgrade;
            proxy_set_header Connection 'upgrade';
            proxy_set_header Host $host;
            proxy_set_header X-Real-IP  $remote_addr;
            proxy_set_header X-Forwarded-For $remote_addr;
            proxy_cache_bypass $http_upgrade;
        }
    }
