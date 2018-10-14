# emojurl
Add support for emojis in your website address, or in your site search.

Figured this out at work (The Highland Council) and thought it would be fun to add this for our users. Put a house emoji into our search...get our housing pages. Put a poo in the serach...get the dog fouling page etc (easter egg: put the dice emoji into the search for a random page! www.highland.gov.uk).

You're looking for the UTF-8 bytes for your chosen emoji (called "PHP Source" on some emoji websites) just remove "\x" so you get something like this "F09F9881" (original code "\xF0\x9F\x98\x81")

## Method 1

If you use PHP for your "404: not found" page you can include this script to detect an emoji in the URL and bounce users to  an appropriate page (can be reconfigured for your search results page too)

## Method 2

Alternatively, If you're using Apache and are brave enough to edit the .htaccess file on your server, you can add the full code (including "\x") like this:

`RewriteRule ^\xF0\x9F\x98\x81?$ /your-redirect-link [R=permanent,L,NC]`
