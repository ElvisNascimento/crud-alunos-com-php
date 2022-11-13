<select name="" id="">
    <option selected>----dia----</option>
    <?php
    for ($i = 1; $i <= 31; $i++) {
        echo "<option>$i</option>";
    };
    ?>
</select>

<select>
    <option selected>----mes----</option>
    <?php
    $mes = ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'];
    for ($i = 0; $i <= 11; $i++) {
        echo "<option>$mes[$i]</option>";
    };
    ?>
</select>

<select>
    <option selected>----ano----</option>
    <?php
    for ($i = 2022; $i >= 1900; $i--) {
        echo "<option>$i</option>";
    };
    ?>
</select>