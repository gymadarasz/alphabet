<!-- TODO styleing and full page html -->
<h1>Alphabet</h1>
<?php echo isset($this) ? $this->create('messages.html.php', $this->data) : ''; ?>
<form method="GET">
    Text:<br>
    <textarea name="text" placeholder="Type something to encode to alphabet..."><?php if ($text ?? false) { ?><?php echo $text ?? ''; ?><?php } ?></textarea>
    <input type="submit">
</form>

<form method="GET">
    Alphabet:<br>
    <textarea name="alphabet" placeholder="Type something to decode to text..."><?php if ($alphabet ?? false) { ?><?php echo $alphabet ?? ''; ?><?php } ?></textarea>
    <input type="submit">
</form>

<!-- TODO latest alphabets-->
