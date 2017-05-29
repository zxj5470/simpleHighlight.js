<?php
//thanks to runnoob.com
$a[] = "asm";
$a[] = "do";
$a[] = "if";
$a[] = "return";
$a[] = "typedef";
$a[] = "auto";
$a[] = "double";
$a[] = "inline";
$a[] = "short";
$a[] = "typeid";
$a[] = "bool";
$a[] = "dynamic_cast";
$a[] = "int";
$a[] = "signed";
$a[] = "typename";
$a[] = "break";
$a[] = "else";
$a[] = "long";
$a[] = "sizeof";
$a[] = "union";
$a[] = "case";
$a[] = "enum";
$a[] = "mutable";
$a[] = "static";
$a[] = "unsigned";
$a[] = "catch";
$a[] = "explicit";
$a[] = "namespace";
$a[] = "static_cast";
$a[] = "using";
$a[] = "char";
$a[] = "export";
$a[] = "new";
$a[] = "struct";
$a[] = "virtual";
$a[] = "class";
$a[] = "extern";
$a[] = "operator";
$a[] = "switch";
$a[] = "void";
$a[] = "const";
$a[] = "false";
$a[] = "private";
$a[] = "template";
$a[] = "volatile";
$a[] = "const_cast";
$a[] = "float";
$a[] = "protected";
$a[] = "this";
$a[] = "wchar_t";
$a[] = "continue";
$a[] = "for";
$a[] = "public";
$a[] = "throw";
$a[] = "while";
$a[] = "default";
$a[] = "friend";
$a[] = "register";
$a[] = "true";
$a[] = "delete";
$a[] = "goto";
$a[] = "reinterpret_cast";
$a[] = "try";
$q = $_GET["q"];
$hint = "";
if (strlen($q) > 0) {
    for ($i = 0; $i < count($a); $i++) {
        if (strtolower($q) == strtolower(substr($a[$i], 0, strlen($q)))) {
            if ($hint == "") {
                $hint = $a[$i];
            } else {
                $hint = $hint . "," . $a[$i];
            }
        }
    }
}
if ($hint == "") {
    $response = "no suggestion";
} else {
    $response = $hint;
}

echo "[" . $response . "]";
?>