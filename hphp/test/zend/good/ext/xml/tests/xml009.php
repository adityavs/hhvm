<?hh
function start_elem($parser,$name,$attribs) {
    var_dump($name);
}
function end_elem()
{
}
<<__EntryPoint>> function main(): void {
$xml = <<<HERE
<a xmlns="http://example.com/foo"
       xmlns:bar="http://example.com/bar"
       xmlns:baz="http://example.com/baz">
  <bar:b />
  <bar:c xmlns:bar="http://example.com/foo"/>
</a>
HERE;

$parser = xml_parser_create_ns("ISO-8859-1","@");
xml_set_element_handler($parser,'start_elem','end_elem');
xml_parser_set_option($parser,XML_OPTION_CASE_FOLDING,0);
xml_parse($parser, $xml);
xml_parser_free($parser);
}
