<style>
    table {
        border-collapse: collapse;
    }
    td {
        width: 50px;
        height: 50px;
        border: 1px solid #222;
        background-size: contain;
    }
    td img {
        max-width: 32px;
        max-height: 32px;
    }
    .black {
        background-color: #222;
    }
    .white {
        background-color: antiquewhite;
    }
</style>
<?php
function showBoard($rank, $file, $piece) {
    $result = "<table>";
    for ($i = 7; $i >= 0; $i--) {
        $result .= "<tr>";
        for ($j = 7; $j >= 0; $j--) {
            $result .= "<td class='";
            if ($i % 2 != $j % 2) {
                $result .= "black";
            } else {
                $result .= "white";
            }
            $result .= "'";
            if ($i == $rank && $j == 7 - $file) {
                $result .= "style='background-image: url(img/$piece.png);'";
            }
            $result .= "></td>";
        }
        $result .= "</tr>";
    }
    $result .= "</table>";
    return $result;
}
if (isset($_POST["rank"]) && isset($_POST["file"]) && isset($_POST["piece"])) {
    $pieces = ["pawn", "bishop", "knight", "rook", "queen", "king"];
    $rank = $_POST["rank"];
    $file = $_POST["file"];
    $piece = $_POST["piece"];
    echo "<form method='post'>
    <label for='rank'>
        Rank:
        <input type='number' name='rank' id='rank' min='1' max='8' value='$rank'>
    </label>
    <label for='file'>
        File:
        <input type='number' name='file' id='file' min='1' max='8' value='$file'>
    </label>
    <label for='piece'>
        Piece:
        <select name='piece' id='piece'>";
            foreach ($pieces as $p) {
                if ($piece == $p) {
                    echo "<option value='$p' selected>".strtoupper($p[0]).substr($p, 1)."</option>";
                } else {
                    echo "<option value='$p'>".strtoupper($p[0]).substr($p, 1)."</option>";
                }
            }
        echo "</select>
    </label>
    <input type='submit' value='Display'>
</form>";
    echo showBoard($rank - 1, $file - 1, $piece);
} else {
    echo "<form method='post'>
    <label for='rank'>
        Rank:
        <input type='number' name='rank' id='rank' min='1' max='8' value='1'>
    </label>
    <label for='file'>
        File:
        <input type='number' name='file' id='file' min='1' max='8' value='1'>
    </label>
    <label for='piece'>
        Piece:
        <select name='piece' id='piece'>
            <option value='pawn'>Pawn</option>
            <option value='knight'>Knight</option>
            <option value='bishop'>Bishop</option>
            <option value='rook'>Rook</option>
            <option value='queen'>Queen</option>
            <option value='king'>King</option>
        </select>
    </label>
    <input type='submit' value='Display'>
</form>";
}

