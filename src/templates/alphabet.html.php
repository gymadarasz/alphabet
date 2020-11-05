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

<?php echo isset($this) ? $this->create('messages.html.php', $this->data) : ''; ?>

<form method="GET">
    <div class="form-group">
        <label for="text">Text:</label>
        <textarea class="form-control" id="text" rows="3" name="text" placeholder="Type something to encode to alphabet..."><?php if ($text ?? false) { ?><?php echo $text ?? ''; ?><?php } ?></textarea>
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
        <textarea class="form-control" id="alphabet" rows="3" name="alphabet" placeholder="Type something to decode to text..."><?php if ($alphabet ?? false) { ?><?php echo $alphabet ?? ''; ?><?php } ?></textarea>
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
        <table class="table">
            <tr>
                <td><strong>A</strong></td>
                <td><strong>B</strong></td>
                <td><strong>C</strong></td>
                <td><strong>D</strong></td>
                <td><strong>E</strong></td>
                <td><strong>F</strong></td>
                <td><strong>G</strong></td>
                <td><strong>H</strong></td>
                <td><strong>I</strong></td>
                <td>J</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
            </tr>
            <tr><td colspan="10"></td></tr>
            <tr>
                <td><strong>K</strong></td>
                <td><strong>L</strong></td>
                <td><strong>M</strong></td>
                <td><strong>N</strong></td>
                <td><strong>O</strong></td>
                <td><strong>P</strong></td>
                <td><strong>Q</strong></td>
                <td><strong>R</strong></td>
                <td><strong>S</strong></td>
                <td>T</td>
            </tr>
            <tr>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
            </tr>
            <tr><td colspan="10"></td></tr>
            <tr>
                <td><strong>U</strong></td>
                <td><strong>V</strong></td>
                <td><strong>W</strong></td>
                <td><strong>X</strong></td>
                <td><strong>Y</strong></td>
                <td><strong>Z</strong></td>
            </tr>
            <tr>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
            </tr>
        </table>
    </div>
</div>

<!-- TODO latest alphabets-->
