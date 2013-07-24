<h2>Routes</h2>

<table class=op-table>
    <thead>
    <tr>
        <th>Domain</th>
        <th>URI</th>
        <th>Name</th>
        <th>Action</th>
        <th>Before Filters</th>
        <th>After Filters</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($routes['routes'] as $route): ?>
    <tr <?= ($route['current'])? 'class="matched"' : '' ?>>
        <td><?= $route['host'] ?></td>
        <td><?= $route['uri'] ?></td>
        <td><?= $route['name'] ?></td>
        <td><?= $route['action'] ?></td>
        <td><?= $route['before'] ?></td>
        <td><?= $route['after'] ?></td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>
