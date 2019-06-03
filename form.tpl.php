<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
    <form method="post" action="form.php">
        <input name="operand1" value="<?=$operand1 ?>">
        <select name="operator">
            <option value="+" <?php if (operator == '+'): ?>selected<?php endif ?> > +</option>
            <option value="-" <?php if (operator == '-'): ?>selected<?php endif ?> > -</option>
            <option value="*" <?php if (operator == '*'): ?>selected<?php endif ?> > *</option>
            <option value="/" <?php if (operator == '/'): ?>selected<?php endif ?> > /</option>

        </select>
        <input name="operand2" value="<?= $operand2 ?>">
        <button type="submit">=</button>
        <?=$result ?>
    </form>
</body>
</html>