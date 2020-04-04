<?hh
<<__EntryPoint>> function main(): void {
var_dump(filter_var("<p>Let me <font color=\"#000000\">see</font> you <br /><b>Stripped</b> down to the bone</p>", FILTER_SANITIZE_STRIPPED));
var_dump(filter_var("!@#$%^&*()><<>+_\"'<br><p /><li />", FILTER_SANITIZE_STRIPPED));
var_dump(filter_var("", FILTER_SANITIZE_STRIPPED));

var_dump(filter_var("<p>Let me <font color=\"#000000\">see</font> you <br /><b>Stripped</b> down to the bone</p>", FILTER_SANITIZE_STRIPPED, FILTER_FLAG_STRIP_LOW));
var_dump(filter_var("!@#$%^&*()><<>+_\"'<br><p /><li />", FILTER_SANITIZE_STRIPPED, FILTER_FLAG_STRIP_LOW));
var_dump(filter_var("", FILTER_SANITIZE_STRIPPED, FILTER_FLAG_STRIP_LOW));

var_dump(filter_var("<p>Let me <font color=\"#000000\">see</font> you <br /><b>Stripped</b> down to the bone</p>", FILTER_SANITIZE_STRIPPED, FILTER_FLAG_STRIP_HIGH));
var_dump(filter_var("!@#$%^&*()><<>+_\"'<br><p /><li />", FILTER_SANITIZE_STRIPPED, FILTER_FLAG_STRIP_HIGH));
var_dump(filter_var("", FILTER_SANITIZE_STRIPPED, FILTER_FLAG_STRIP_HIGH));

echo "Done\n";
}
