<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
            <button type="button" class="btn btn-info px-4 mx-4" data-toggle="modal" data-target="#addContact">Add</button>
            <form class="form-inline my-2 my-lg-0" id="search">
                <input class="form-control mr-sm-2" id="keyword" name="keyword" value ="" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <!-- Add modal -->
        <div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="addContactLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addContactLabel">Add contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="contactAjax.php?type=add" id="addForm">
                            <div class="form-group">
                                <label for="addName">Name</label>
                                <input type="text" class="form-control" name="name" value="test" id="addName" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="addPhone">Phone</label>
                                <input type="text" class="form-control" name="phone" value="123" id="addPhone" placeholder="Phone number">
                            </div>
                            <div class="form-group">
                                <label for="addEmail">Name</label>
                                <input type="email" class="form-control" name="email" value="asd@ssd.asd" id="addEmail" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit modal -->
        <div class="modal fade" id="editContact" tabindex="-1" role="dialog" aria-labelledby="editContactLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editContactLabel">Edit contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="contactAjax.php?type=edit" id="editForm">
                            <div class="form-group">
                                <label for="editName">Name</label>
                                <input type="text" class="form-control" name="name" value="" id="editName" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="editPhone">Phone</label>
                                <input type="text" class="form-control" name="phone" value="" id="editPhone" placeholder="Phone number">
                            </div>
                            <div class="form-group">
                                <label for="editEmail">Name</label>
                                <input type="email" class="form-control" name="email" value="" id="editEmail" placeholder="Email">
                            </div>
                            <input type="hidden" name="id" value="" id="editId">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row">
            <table id="table" border=1>
                <thead>
                    <tr>
                        <th width='250'>Name</th>
                        <th width='250'>Phone</th>
                        <th width='250'>Email</th>
                        <th width='250'>Options</th>
                    </tr>
                </thead>
                <tbody id="content">
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
    var contacts;
    window.onload = function() {
        var xhr = new XMLHttpRequest;
        xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            contacts = JSON.parse(this.responseText);
            if (contacts != null) {
                // Print data table
                for (var i = 0; i < contacts.length; i++) {
                    var str =
                    `<tr>
                        <td width='250'>${contacts[i]["name"]}</td>
                        <td width='250'>${contacts[i]["phone"]}</td>
                        <td width='250'>${contacts[i]["email"]}</td>
                        <td width='250'>
                            <button onClick=showEditForm(event,'${contacts[i]["id"]}') class="btn btn-sm btn-primary">Edit</button>
                            <button onClick=deleteContact('${contacts[i]["id"]}') class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>`;
                    document.getElementById('content').innerHTML += str;
                }

                // Get first letter in array
                console.log({contacts});
                
                const firstLetters = contacts.reduce((array, contact, index) => {
                    
                    if(index === 0 && array.length === 0) {
                        return [...array, contact.name[0]]
                    } else {
                        return isExist(array, contact.name[0]) ? [] : [...array, contact.name[0]];
                    }
                    
                }, []);
                
                function isExist(array, target) {
                    const num = array.find(function (e) {
                        return e === target;
                    })
                    
                    if(num) {
                        console.log({num});
                        console.log('return TRUE');
                        
                        return true;
                    }

                    return false;
                }
                console.log({firstLetters});
                
            }
        }
        }
        xhr.open("GET", "contactAjax.php?type=all", true);
        xhr.send();
    }

    function showEditForm(e, id) {
        const selected = contacts.filter(contact => contact.id === id).pop();
        
        $('#editContact').modal('show');
        $(`#editName`).val(selected.name);
        $(`#editPhone`).val(selected.phone);
        $(`#editEmail`).val(selected.email);
        $(`#editId`).val(id);
    }

    function deleteContact(id) {
        const ok = confirm("You cannot undo this action. Delete?");
        if(!ok) {
            return;
        }
        
        const url = `contactAjax.php?type=delete&id=${id}`;

        const xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4 && xhr.status == 200) {
                location.reload()
            }
        }
        xhr.send();
    }

    $('#addForm').submit(function( event ) {
        event.preventDefault();

        const xhr = new XMLHttpRequest();
        const name = $(`#addName`).val();
        const phone = $(`#addPhone`).val();
        const email = $(`#addEmail`).val();
        const params = `name=${name}&phone=${phone}&email=${email}`;
        

        xhr.open('POST', 'contactAjax.php?type=add', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4 && xhr.status == 200) {
                const res = JSON.parse(xhr.response);
                
                if(res.success) {
                    alert(res.msg)
                    location.reload()
                } else {
                    alert(res.msg);
                }
            }
        }
        xhr.send(params);
    });

    $('#editForm').submit(function( event ) {
        event.preventDefault();

        const xhr = new XMLHttpRequest();
        const name = $(`#editName`).val();
        const phone = $(`#editPhone`).val();
        const email = $(`#editEmail`).val();
        const params = `name=${name}&phone=${phone}&email=${email}`;

        xhr.open('POST', 'contactAjax.php?type=edit', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            
            if(xhr.readyState == 4 && xhr.status == 200) {
                const res = JSON.parse(xhr.response);
                
                if(res.success) {
                    alert(res.msg)
                    location.reload()
                } else {
                    alert(res.msg);
                }
            }
        }
        xhr.send(params);
    });

    $('#search').submit(function( event ) {
        event.preventDefault();

        var xhr = new XMLHttpRequest;
        const params = `keyword=${$('#keyword').val()}`;
        
        xhr.open("POST", "contactAjax.php?type=search", true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        
        xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.response);
            
            const searchContacts = JSON.parse(this.responseText);
            console.log({searchContacts});
            $('#content').empty();
            if (searchContacts != null) {
                for (var i = 0; i < searchContacts.length; i++) {
                    var str =
                    `<tr>
                        <td width='250'>${searchContacts[i]["name"]}</td>
                        <td width='250'>${searchContacts[i]["phone"]}</td>
                        <td width='250'>${searchContacts[i]["email"]}</td>
                        <td width='250'>
                            <button onClick=showEditForm(event,'${searchContacts[i]["id"]}') class="btn btn-sm btn-primary">Edit</button>
                            <button onClick=deleteContact('${searchContacts[i]["id"]}') class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>`;
                    document.getElementById('content').innerHTML += str;
                }
            } else {
                alert('No result found.');
            }
        }
        }
        xhr.send(params);
    });
    </script>
    
</body>
</html>
