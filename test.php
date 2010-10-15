<?php

require 'tidyjson.php';

function dump($str) {
	echo "<pre>" . htmlentities($str) . "</pre>\n";
}

$json = <<<EOF
{
    "glossary": {
        "title": "example glossary",
		"GlossDiv": {
            "title": "S",
			"GlossList": {
                "GlossEntry": {
                    "ID": "SGML",
					"SortAs": "SGML",
					"GlossTerm": "Standard Generalized Markup Language",
					"Acronym": "SGML",
					"Abbrev": "ISO 8879:1986",
					"GlossDef": {
                        "para": "A meta-markup language, used to create markup languages such as DocBook.",
						"GlossSeeAlso": ["GML", "XML"]
                    },
					"GlossSee": "markup"
                }
            }
        }
    }
}
EOF;

echo "Original: ";
dump($json);

$tidy = TidyJSON::tidy($json);
echo "Tidy: ";
dump($tidy);

$compressed = json_encode(json_decode($json));
echo "Compressed w/ PHP: ";
dump($compressed);

$tidy = TidyJSON::tidy($compressed);
echo "Re-tidied: ";
dump($tidy);

echo "<hr /><h3>Sourcecode:</h3>";
highlight_file(__FILE__);

