<?php $title = 'Admin Blogs Edit' ?>

<?php require 'components/header.php'; ?>

<body>
    <?php include 'components/menulist.php'; ?>


    <div class="adminpages-container">
        <h1 class="centertext">Admin Blogs</h1>

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
                foreach ($params[0] as $blog) : ?>
                    <tr>
                        <td>
                            <?php echo $blog['id']; ?>
                        </td>

                        <td>
                            <?php echo $blog['title']; ?>
                        </td>

                        <td>
                            <?php echo $blog['content']; ?>
                        </td>

                        <td>
                            <?php echo $blog['status']; ?>
                        </td>

                        <td>
                            <ul>
                                <li>
                                    <?php
                                    if ($blog['status'] === 'draft') {
                                        echo '<a href="/admin/blogs/?id=' . $blog['id'] . '&action=publish">publish</a>';
                                    } else {
                                        echo '<a href="/admin/blogs/?id=' . $blog['id'] . '&action=unpublish">unpublish</a>';
                                    } ?>
                                </li>

                                <li>
                                    <a href="/admin/blog/edit/?id=<?php echo $blog['id'] ?>">edit</a>
                                </li>

                                <li>
                                    <a href="/showblog/?id=<?php echo $blog['id'] ?>">show</a>
                                </li>

                                <li>
                                    <a href="/admin/blogs/?id=<?php echo $blog['id'] ?>&action=delete">delete</a>
                                </li>

                            </ul>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <?php require 'components/footer.php'; ?>