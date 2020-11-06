<!-- TODO styleing and full page html -->

<div class="row">
    <div class="col text-center">
        <br>
        <h1>Alphabet</h1>
        <p>
            Send and decode your secret message with this Alphabet message converter.<br>
            <br>
            <strong>What is alphabet?</strong></br>
            An alphabet is a standardized set of basic written symbols or graphemes (called letters) that represent the phonemes of certain spoken languages.<br>
            (Wikipedia)<br> 
        </p>
        <a href="https://www.facebook.com/sharer/sharer.php?u=165.232.104.128/alphabet/" target="_blank">
            <img src="/alphabet/src/templates/fb-share.png">
        </a>
    </div>
</div>

{{ isset($this) ? $this->create('messages.html.php', $this->data) : ''; }}

<form method="GET">
    <div class="form-group">
        <label for="text">Text:</label>
        <textarea class="form-control" id="text" rows="3" name="text" placeholder="Type something to encode to alphabet...">{{?php if ($text ?? false) { }}{{ $text ?? ''; }}{{?php } }}</textarea>
    </div>

    <div class="row">
        <div class="col text-center">
            <input class="btn btn-primary" type="submit" value="Encode">
        </div>
    </div>
</form>

<form method="GET">
    <div class="form-group">
        <label for="alphabet">Alphabet:</label>
        <textarea class="form-control" id="alphabet" rows="3" name="alphabet" placeholder="Type something to decode to text...">{{?php if ($alphabet ?? false) { }}{{ $alphabet ?? ''; }}{{?php } }}</textarea>
    </div>

    <div class="row">
        <div class="col text-center">
            <input class="btn btn-primary" type="submit" value="Decode">
        </div>
    </div>
</form>


<div class="row">
    <div class="col text-center">
        <br>
        If you are not sure how it works here is a hint:<br>
        <br>
        <div class="hint-cell">
            <strong>A</strong>1
        </div>
        <div class="hint-cell">
            <strong>B</strong>2
        </div>
        <div class="hint-cell">
            <strong>C</strong>3
        </div>
        <div class="hint-cell">
            <strong>D</strong>4
        </div>
        <div class="hint-cell">
            <strong>E</strong>5
        </div>
        <div class="hint-cell">
            <strong>F</strong>6
        </div>
        <div class="hint-cell">
            <strong>G</strong>7
        </div>
        <div class="hint-cell">
            <strong>H</strong>8
        </div>
        <div class="hint-cell">
            <strong>I</strong>9
        </div>
        <div class="hint-cell">
            <strong>J</strong>10
        </div>
        <div class="hint-cell">
            <strong>K</strong>11
        </div>
        <div class="hint-cell">
            <strong>L</strong>12
        </div>
        <div class="hint-cell">
            <strong>M</strong>13
        </div>
        <div class="hint-cell">
            <strong>N</strong>14
        </div>
        <div class="hint-cell">
            <strong>O</strong>15
        </div>
        <div class="hint-cell">
            <strong>P</strong>16
        </div>
        <div class="hint-cell">
            <strong>Q</strong>17
        </div>
        <div class="hint-cell">
            <strong>R</strong>18
        </div>
        <div class="hint-cell">
            <strong>S</strong>19
        </div>
        <div class="hint-cell">
            <strong>T</strong>20
        </div>
        <div class="hint-cell">
            <strong>U</strong>21
        </div>
        <div class="hint-cell">
            <strong>V</strong>22
        </div>
        <div class="hint-cell">
            <strong>W</strong>23
        </div>
        <div class="hint-cell">
            <strong>X</strong>24
        </div>
        <div class="hint-cell">
            <strong>Y</strong>25
        </div>
        <div class="hint-cell">
            <strong>Z</strong>26
        </div>

    </div>
</div>

<!-- TODO latest alphabets-->
