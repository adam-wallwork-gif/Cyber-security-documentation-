<h1 align="center">The web API hackers methodology</h1>
<h2 align="center">By Adam Wallwork</h2>
<p align="center"><a href="https://www.linkedin.com/in/adam-wallwork-aab4861a6">LinkedIn Profile</a></p>

<h3 align="center">Summary</h3>

**The web API hackers methodology** similar to [Jason Haddix's Bug Bounty Hunter Methodology](https://jasonhaddix.gumroad.com/l/lycucs) focuses on the process of discovering, testing and exploiting vulnerabilities specific to REST and GraphQL web APIs for penetration testers, developers and bug bounty hunters to use in their engagements.

## Table of Contents

-----------------

1. [Information Gathering](#information-gathering)
   - [API Type Identification](#api-type-identification)
   - [Discovering API Documentation](#discovering-api-documentation)
   - [Testing Authentication & Authorisation](#testing-authentication--authorisation)
   - [HTTP Method Enumeration](#http-method-enumeration)

2. [Reconnaissance](#reconnaissance)
   - [Passive Reconnaissance](#passive-reconnaissance)
      - [Search Engine Dorking](#search-engine-dorking)
      - [DNS Enumeration](#dns-enumeration)
      - [Technology Stack Identification](#technology-stack-identification)
      - [Identifying Version Numbers](#identifying-version-numbers)
      - [Discovering Historical Data](#discovering-historical-data)
      - [Vulnerabilities & Exploits](#vulnerabilities--exploits)
   - [Active Reconnaissance](#active-reconnaissance)
      - [Port Scanning](#port-scanning)
      - [Subdomain Enumeration](#subdomain-enumeration)
      - [Walking The Application](#walking-the-application)
      - [Web Crawling – Spidering](#web-crawling--spidering)
      - [Technology Stack Identification](#technology-stack-identification-1)
      - [JavaScript File Analysis](#javascript-file-analysis)

3. [Content Discovery](#content-discovery)
   - [Subdomain Brute-Forcing](#subdomain-brute-forcing)
   - [Directory Brute-Forcing](#directory-brute-forcing)
      - [File Type Brute-Forcing](#file-type-brute-forcing)
   - [API Endpoint Analysis](#api-endpoint-analysis)
   - [API Version Discovery](#api-version-discovery)
   - [Parameter Fuzzing](#parameter-fuzzing)

4. [Automated Vulnerability Scanning](#automated-vulnerability-scanning)
   - [Nuclei Vulnerability Scanning](#nuclei-vulnerability-scanning)
      - [Nuclei Fuzzing](#nuclei-fuzzing)
   - [Nmap Scripting Engine Scanning](#nmap-scripting-engine-scanning)

6. [API Analysis](#api-analysis)
   - [Broken Object Level Authorisation – BOLA](#broken-object-level-authorisation--bola)
   - [Broken Authentication](#broken-authentication)
   - [Broken Object Property Level Authorization](#broken-object-property-level-authorization)
   - [Broken Function Level Authorization](#broken-function-level-authorization)
   - [Unrestricted Access to Sensitive Business Flows](#unrestricted-access-to-sensitive-business-flows)
   - [Unsafe Consumption of APIs](#unsafe-consumption-of-apis)
   - [Business Logic Flaws](#business-logic-flaws)
   - [Error Handling and Exception Testing](#error-handling-and-exception-testing)
   - [Rate Limiting and Throttling](#rate-limiting-and-throttling)
   - [Data Validation](#data-validation)
      - [Injection Testing](#injection-testing)
   - [Cross-Origin Resource Sharing](#cross-origin-resource-sharing)
   - [Security Headers](#security-headers)
   - [API Rate Limiting Bypass](#api-rate-limiting-bypass)

-----------------

# Information Gathering
## API Type Identification
## Discovering API Documentation
## Testing Authentication & Authorisation
## HTTP Method Enumeration

# Reconnaissance
## Passive Reconnaissance
### Search Engine Dorking
### DNS Enumeration
### Technology Stack Identification
### Identifying Version Numbers
### Discovering Historical Data
### Vulnerabilities & Exploits
## Active Reconnaissance
### Port Scanning
### Subdomain Enumeration
### Walking The Application
### Web Crawling – Spidering
### Technology Stack Identification
### JavaScript File Analysis

# Content Discovery
## Subdomain Brute-Forcing
## Directory Brute-Forcing
### File Type Brute-Forcing
## API Endpoint Analysis
## API Version Discovery
## Parameter Fuzzing

# Automated Vulnerability Scanning
## Automated Vulnerability Scanning
## Nuclei Vulnerability Scanning
### Nuclei Fuzzing
## Nmap Scripting Engine Scanning

# API Analysis
## Broken Object Level Authorisation – BOLA
## Broken Authentication
## Broken Object Property Level Authorization
## Broken Function Level Authorization
## Unrestricted Access to Sensitive Business Flows
## Unsafe Consumption of APIs
## Business Logic Flaws
## Error Handling and Exception Testing
## Rate Limiting and Throttling
## Data Validation
### Injection Testing
## Cross-Origin Resource Sharing
## Security Headers
## API Rate Limiting Bypass
