<!-- TODO styleing and full page html -->

<div class="row">
    <div class="col text-center">
        <h1>Alphabet</h1>
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



<!-- TODO latest alphabets-->
