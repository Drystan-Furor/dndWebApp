<?php $title = 'Admin Page Edit' ?>

<?php require 'components/header.php'; ?>

<body>
    <?php include 'components/menulist.php'; ?>

    <div class="adminpages-container">
        <h1>Admin Pages</h1>

        <div class="adminpages">
            <table>
                <tr>
                    <td>ID</td>
                    <td>TITLE</td>
                    <td>CONTENT</td>
                    <td>STATUS</td>
                    <td>ACTION</td>
                </tr>
                <?php
                foreach ($params[0] as $page) : ?>
                    <tr>
                        <td>
                            <?php echo $page['id']; ?>
                        </td>

                        <td>
                            <?php echo $page['title']; ?>
                        </td>

                        <td>
                            <?php echo $page['content']; ?>
                        </td>

                        <td>
                            <?php echo $page['status']; ?>
                        </td>

                        <td>
                            <ul>
                                <li>
                                    <?php
                                    if ($page['status'] === 'draft') {
                                        echo '<a href="/admin/pages/?id=' . $page['id'] . '&action=publish">publish</a>';
                                    } else {
                                        echo '<a href="/admin/pages/?id=' . $page['id'] . '&action=unpublish">unpublish</a>';
                                    } ?>
                                </li>

                                <li>
                                    <a href="/admin/page/edit/?id=<?php echo $page['id'] ?>">edit</a>
                                </li>

                                <li>
                                    <a href="/newpage/?id=<?php echo $page['id'] ?>">show</a>
                                </li>

                                <li>
                                    <a href="/admin/pages/?id=<?php echo $page['id'] ?>&action=delete">delete</a>
                                </li>

                            </ul>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <?php require 'components/footer.php'; ?>