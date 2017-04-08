<?$GLOBALS['installstage'] = $_GET['id'];
if ($GLOBALS['installstage'] == 1){
	echo '      <table class="highlight">
        <thead>
          <tr>
            <th>Этап</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Вступление</td>
          </tr>
          <tr>
            <td><b>Название</b></td>
          </tr>
          <tr>
            <td>База данных</td>
          </tr>
          <tr>
            <td>Аккаунт Orlandonetworks</td>
          </tr>
          </tr>
          <tr>
            <td>Продолжение</td>
          </tr>
        </tbody>
      </table>';	
} elseif($GLOBALS['installstage'] == 2)
{
	echo '      <table class="highlight">
        <thead>
          <tr>
            <th>Этап</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Вступление</td>
          </tr>
          <tr>
            <td>Название</td>
          </tr>
          <tr>
            <td><b>База данных</b></td>
          </tr>
          <tr>
            <td>Аккаунт Orlandonetworks</td>
          </tr>
          </tr>
          <tr>
            <td>Продолжение</td>
          </tr>
        </tbody>
      </table>';
}

elseif($GLOBALS['installstage'] == 3){
	echo '      <table class="highlight">
        <thead>
          <tr>
            <th>Этап</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Вступление</td>
          </tr>
          <tr>
            <td>Название</td>
          </tr>
          <tr>
            <td>База данных</td>
          </tr>
          <tr>
            <td><b>Аккаунт Orlandonetworks</b></td>
          </tr>
          </tr>
          <tr>
            <td>Продолжение</td>
          </tr>
        </tbody>
      </table>';
}

else {
	echo '      <table class="highlight">
        <thead>
          <tr>
            <th>Этап</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><b>Вступление</b></td>
          </tr>
          <tr>
            <td>Название</td>
          </tr>
          <tr>
            <td>База данных</td>
          </tr>
          <tr>
            <td>Аккаунт Orlandonetworks</td>
          </tr>
          </tr>
          <tr>
            <td>Продолжение</td>
          </tr>
        </tbody>
      </table>';
}?>
