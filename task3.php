<style>
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .text-red {
        color: red;
    }
    .text-green {
        color: green;
    }
    .text-blue {
        color: blue;
    }
    .background-black {
        background-color: black;
    }
    .background-yellow {
        background-color: yellow;
    }
    .font-30 {
        font-size: 30px;
    }
</style>
<?php
function buildMenu($items) {
    $result = "<nav>";
    foreach ($items as $item) {
        $content = $item["content"];
        $styles = $item["styles"];
        $result .= "<div class='item ";
        foreach ($styles as $style) {
            $result .= "$style ";
        }
        $result .= "'>$content</div>";
    }
    $result .= "</nav>";
    return $result;
}
$items = [
    ["content"=>"Item 1","styles"=>["text-red", "background-black"]],
    ["content"=>"Item 2","styles"=>["text-red", "background-yellow", "font-30"]],
    ["content"=>"Item 3","styles"=>["text-green", "background-black"]],
    ["content"=>"Item 4","styles"=>["text-blue"]],
    ["content"=>"Item 5","styles"=>["text-red", "background-black"]],
    ["content"=>"Item 6","styles"=>["text-red", "background-black"]],
];
echo buildMenu($items);