INSERT INTO [#__rsfirewall_configuration] ([name], [value], [type]) VALUES
('active_scanner_status', '1', 'int'),
('capture_backend_password', '1', 'int'),
('verify_upload', '1', 'int'),
('verify_upload_blacklist_exts', 'pht\r\nphp\r\njs\r\nexe\r\ncom\r\nbat\r\ncmd\r\nmp3', 'text'),
('monitor_core', '1', 'int'),
('monitor_users', '', 'array-int'),
('active_scanner_status_backend', '1', 'int'),
('backend_password_enabled', '0', 'int'),
('backend_password_use_parameter', '0', 'int'),
('backend_password_parameter', 'password', 'text'),
('backend_password', '', 'text'),
('log_emails', '', 'text'),
('log_alert_level', '', 'array-text'),
('log_history', '30', 'int'),
('log_overview', '5', 'int'),
('verify_agents', 'perl\ncurl\njava', 'array-text'),
('verify_multiple_exts', '1', 'int'),
('capture_backend_login', '1', 'int'),
('code', '', 'text'),
('verify_generator', '1', 'int'),
('grade', '0', 'int'),
('verify_emails', '0', 'int'),
('offset', '300', 'int'),
('request_timeout', '0', 'int'),
('max_retries', '10', 'int'),
('check_md5', '1', 'int'),
('retries_timeout', '10', 'int'),
('log_system_check', '0', 'int'),
('enable_extra_logging', '0', 'int'),
('enable_backend_captcha', '0', 'int'),
('backend_captcha', '3', 'int'),
('blocked_countries', '', 'array-text'),
('autoban_attempts', '10', 'int'),
('enable_autoban', '0', 'int'),
('enable_autoban_login', '0', 'int'),
('log_hour_limit', '50', 'int'),
('log_emails_count', '0', 'int'),
('log_emails_send_after', '0', 'int'),
('lfi', '1', 'int'),
('rfi', '1', 'int'),
('enable_php_for', 'get', 'array-text'),
('enable_sql_for', 'get', 'array-text'),
('enable_js_for', 'post', 'array-text'),
('filter_js', '1', 'int'),
('filter_uploads', '1', 'int'),
('disable_installer', '0', 'int'),
('disable_new_admin_users', '0', 'int'),
('admin_users', '', 'array-int'),
('file_permissions', '644', 'int'),
('folder_permissions', '755', 'int'),
('google_safebrowsing_api_key', '', 'text'),
('google_webrisk_api_key', '', 'text'),
('google_apis', 'safebrowsing\nwebrisk', 'array-text'),
('abusive_ips', '0', 'int'),
('ipv4_whois', 'http://whois.domaintools.com/{ip}', 'text'),
('ipv6_whois', 'http://whois.domaintools.com/{ip}', 'text'),
('system_check_last_run', '', 'text'),
('deny_referer', '', 'text'),
('check_proxy_ip_headers', 'HTTP_X_REAL_IP\nHTTP_CLIENT_IP\nHTTP_TRUE_CLIENT_IP\nHTTP_X_FWD_IP_ADDR\nHTTP_X_FORWARDED_FOR\nHTTP_X_FORWARDED\nHTTP_FORWARDED_FOR\nHTTP_FORWARDED\nHTTP_VIA\nHTTP_X_COMING_FROM\nHTTP_COMING_FROM\nHTTP_CF_CONNECTING_IP\nHTTP_INCAP_CLIENT_IP', 'array-text'),
('check_user_password', '1', 'int');