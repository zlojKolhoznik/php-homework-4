<style>
    .class1 {
        background-color: rebeccapurple;
        color: yellow;
    }
    .class2 {
        background-color: black;
        color: green;
        font-size: 40px;
    }
</style>
<?php
function addElement($tag, $class, $content) {
    echo "<$tag class='$class'>$content</$tag>";
}

addElement("div", "class1", "this is first class");
addElement("div", "class2", "this is second class");
