<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('profile_photo') ?></th>
                <th><?= $this->Paginator->sort('profile_photo_dir') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->profile_photo) ?></td>
                <td><?= h($user->profile_photo_dir) ?></td>
                <td><?= h($user->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>This is a heading</h2>
    
    <p>This is a paragraph.</p>
    <p>This is another paragraph.</p>

    <button>Click me</button>
    
    <br />
    
    <div class="ui-widget">
      <label for="tags">Tags: </label>
      <input id="tags">
    </div>
    <br />

      <?php echo $this->Form->create('User', ['type' => 'GET', 'class' => 'navbar-form navbar-left', 'url' => ['controller' => 'users', 'action' => 'search']]); ?>
      <div class="form-group">
          <?php echo $this->Form->input('search', ['label' => false, 'div' => false, 'id' => 's', 'class' => 'form-control s', 'autocomplete' => 'off', 'placeholder' => 'Buscar usuario...']); ?>
      </div>
      <?php echo $this->Form->button('Buscar', ['div' => false, 'class' => 'btn btn-primary']); ?>
      <?php echo $this->Form->end(); ?>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>

        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
