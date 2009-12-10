# Thought

So I've been needing a good blogging engine, so I figured I'd do what all of
the cool kids did long ago, and write my own.

## Basis

I want to be able to do more in plain text, with using as few database calls as
possible. So what I think I'm going to do is use an even slower approach and
make calls to disk. This is all very much based off the idea of jekyll. but
basically there is a file that contains the post content in markdown and a file
that contains the meta data about the file. Caching will be done in SQLite, I
think.

## Who?

This was coded by Nathaniel "Nat" Welch aka icco, who can be contacted at nat@natwelch.com

