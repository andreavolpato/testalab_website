You need to populate the file testa.bib with all the references you would like to see in the website.

For example, go to scopus:
This the page of Ilaria Testa
https://www.scopus.com/authid/detail.uri?authorId=13105421700
And export all the articles as bibtex.
Press "Export all >> Bibtex".

!!!NOTE!!!
Manually remove the word with accents from the citationkey. These characters make the bibtex_js.js script to crash.
Replace:
- Bodén with Boden
- Cáceres with Caceres
Also no heading is allowed in the document. Remove any line at the beginning of the file from scopus.


TODO
For the future we might consider using https://github.com/larsgw/citation.js