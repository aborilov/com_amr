<?php defined('_JEXEC') or die('Restricted access'); ?>
<h1><?php echo $this->greeting; ?>,<?php echo $this->user; ?></h1>
<body>        
    <table width="100%" border="1" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="7" align="center">Таблица пользователя администратора / ввод данных</td>
			</tr>
			<tr>
			<td align="center">Адрес</td>
			<td align="center" colspan="2">Электроэнергия</td>
			<td align="center" colspan="2">>Газ</td>
			<td align="center" colspan="2">>Вода</td>
			</tr>
		<tr>
			<tr>
			<td align="left" width="25%">Газ</td>
			<td align="center" width="20%">Электроэнергия</td><td align="center" width="5%">дата</td>
			<td align="center" width="20%">Газ</td><td align="center" width="5%">дата</td>
			<td align="center" width="20%">Вода</td><td align="center" width="5%">дата</td>
		</tr>
		
		<tr>
            <td colspan="7" align="right"><br><button style="text-align: center">Сохранить</button></br></td>
			</tr>
</body>
