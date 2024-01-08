<?php
function dd($name)
{
    echo '<pre>';
    var_dump($name);
    echo '</pre>';
}

function read($conn)
{
    $select = $conn->query('SELECT * FROM person');
    echo '<ul class="list">';
    while ($row = $select->fetch_assoc()) {
        $id = $row['id'];
        echo
        <<<html
            <li class="item" id="$id">
                <form action="/" method="post" style="display: flex; align-items: center;">
                    <input class="input-data-from-bd" type="text" name="name" value="{$row['name']}">
                    <input class="input-data-from-bd" type="text" name="age" value="{$row['age']}">
                    <input class="input-data-from-bd" type="text" name="nation" value="{$row['nation']}">
                    <input type="hidden" name="id" value="$id">
                    <button class="edit-btn" name="edit" type="submit">edit</button>
                </form>
                
                <form class="form-delete" action="/" method="post">
                    <input type="hidden" name="id" value="$id">
                    <button class="delete-btn" name="delete" type="submit">delete</button>
                </form>
            </li>
        html;
    }
    echo '</ul>';
}

function create($conn)
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $nation = $_POST['nation'];
    $sqlCreate = "INSERT INTO person (name, age, nation) VALUES ('$name', '$age', '$nation')";
    $conn->query($sqlCreate);
    header("Location: index.php");
}

function delete($conn)
{
    $id = $_POST['id'];
    $sqlDelete = "DELETE FROM person WHERE id = $id";
    $conn->query($sqlDelete);
    header("Location: index.php");
}

function update($conn)
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $nation = $_POST['nation'];

    $sqlUpdate = "UPDATE person SET name='$name', age='$age', nation='$nation' WHERE id=$id";
    $conn->query($sqlUpdate);
    header("Location: index.php");
}
