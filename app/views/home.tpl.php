<table>
  <tr>
    <th>Nom</th>
    <th>Description</th>
    <th>Photo</th>
    <th>Type</th>
  </tr>
  <?php foreach($viewVars['character'] as $character) :?> 
    <tr>
      <td><?= $character->getName()?></td>
      <td><?= $character->getDescription()?></td>
      <td><img src="<?= $viewVars['baseURL'] . '/assets/img/' . $character->getPicture()?>" alt="<?= $character->getName()?>"></td>
      <td><?= $viewVars['type'][$character->getType_id()-1]->getName()?></td>
    </tr>
  <?php endforeach ?>
</table>