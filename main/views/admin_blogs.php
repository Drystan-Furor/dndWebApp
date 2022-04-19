<?php $title = 'Admin Blogs Edit' ?>
<?php
/** 
 * INSERT INTO `blogs` (`id`, `title`, `content`, `slug`, `status`) 
 * VALUES ('1', 'First Blog', 
 * 'Na het voltooien van verschillende cursussen ben ik in staat om zelfstandig een 
 * eenvoudige webapplicatie te bouwen in PHP. Hiermee ga ik aan de slag om Software Developer te worden.\r\n\r\n 
 * Deel 1 was gericht op de syntax en semantiek\r\n\r\n- Opzetten van een ontwikkelomgeving\r\n- 
 * Statements\r\n- Arrays\r\n- Operators\r\n- Control Structures (if / else statements)\r\n- 
 * Functions\r\n- String functions\r\n- Loops\r\n- Includes\r\n- HTML Forms\r\n- Requests\r\n- 
 * Sessions\r\n\r\nDeel 2 richtte zich op object georiënteerd programmeren (OOP)\r\n\r\n- 
 * Classes / Objects\r\n- Access modifiers\r\n- Overerving\r\n- Getters en Setters\r\n- 
 * Constanten\r\n- Abstract Classes en Interfaces\r\n- Static keyword\r\n- 
 * Polymorfisme\r\n\r\nDeel 3 wass gericht op het werken met een database.\r\n\r\n- 
 * SQL en Queries\r\n- Database relationships (kardinaliteit)\r\n- Database ontwerpen\r\n- 
 * PHP MySQL functies\r\n- Gebruik phpMyAdmin\r\n- Object Relational Mapping (ORM)\r\n\r\n\r\n
 * De basis van het begrip Databases en haar vormen\r\n● Een database modelleren en implementeren van 
 * begin tot eind\r\n● Een database manipuleren met behulp van SQL\r\n● Queries uitvoeren met SQL\r\n\r\n
 * De basis van JavaScript\r\n● Simpele JavaScript functies maken\r\n● Arithmathische operatoren\r\n● 
 * Variabelen, datatypen, manipulatie\r\n● Kleine toepassing van JavaScript in HTML',
 *  'cursus', 'draft');
 */ ?>


<?php require 'components/header.php'; ?>

<body>
    <?php include 'components/menulist.php'; ?>


    <div class="adminpages-container">
        <h1>Admin Blogs</h1>

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