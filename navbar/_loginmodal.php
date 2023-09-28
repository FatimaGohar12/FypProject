<?php
echo
// <!-- lOGIN-MODAL -->
// <!-- Modal -->
'<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login to iDiscuss</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="./navbar/_loginhandel.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="loginemail" name="loginemail"
                            aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" name="loginPassword">
                            <div id="emailHelp" class="form-text">Well never share your Password with anyone else.</div>
                            <input type="checkbox" class="my-4" onclick="myFunction()"> Show Password
                        <script>
                        function myFunction() {
                          var x = document.getElementById("loginPassword");
                          if (x.type === "password") {
                            x.type = "text";
                          } else {
                            x.type = "password";
                          }
                        }
                        </script>
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>';
