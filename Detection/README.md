The below command looks for specific functions commonly associated with code execution and web based malware (e.g., eval, shell_exec, base64_decode), as well as patterns indicative of encoded data, such as base64 strings, MD5, SHA1, and SHA256 hashes, and sequences of non-printable or long alphanumeric characters which may indicate obfuscated code.

Note: Command may produce false positives!

```
grep -rlE "(base64_decode|eval|gzinflate|str_rot13|shell_exec|system|exec|passthru|assert|include|require|fopen|file_get_contents|curl_exec|create_function|unserialize|ob_start|stripslashes|str_replace|preg_replace|preg_match|[A-Za-z0-9+/=]{20,}|[0-9a-fA-F]{32}|[0-9a-fA-F]{40}|[0-9a-fA-F]{64}|[A-Za-z0-9]{10,}|[^[:print:]]{5,}|[^\s]{15,})" /var/www/html
```
