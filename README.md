# JSONBee
Collected JSONP endpoints to help bypass content security policy of different websites.

The tool was presented during HackIT 2018 in Keiv.

# What is JSONBee?

The main idea behind this tool is to bypass content security policy for many websites in an automated way. JSONBee takes an input of a url name (i.e. https://www.facebook.com), parses the CSP (Content-Security Policy), and automatically suggest the XSS payload that would bypass the CSP. It mainly focuses on JSONP endpoints gathered during my bug bounty hunting activities, and could be used to bypass the CSP.

JSONBee relies on 3 methods to gather the JSONP endpoints:
* The repository within this project;
* Google dorks;
* Internet archive (archive.org).

The tool is not yet fully completed as I'm still adding some validations and features too. However, the repository will be hosted here so that anyone can use it till the tool is ready.

The repo contains ready-to-use payloads that can bypass CSP for Facebook.com, Google.com and more.

**Bypasing Facebook.com Content-Security policy:**
Facebook.com allows *.google.com in its CSP policy (script-src directive), thus, below payload would work like a charm to execute JavaScript on Facebook.com:
`"><script+src="https://cse.google.com/api/007627024705277327428/cse/r3vs7b0fcli/queries/js?callback=alert(1337)"></script>`

If you came across a website that trusts any of the domains in jsonp.txt file in its script-src directive, then pickup a payload  that matches the domain and have fun :)

# How can you help?
You are all welcome to contribute by adding links to sites that uses JSONP endpoins/callbacks to make the repo bigger and more usefull for bug hunters, pentesters, and security researchers.
