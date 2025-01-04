<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Chỉnh sửa User</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-7">
                <div class="p-5">
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label  class="form-label">Họ tên</label>
                                <input type="text" class="form-control form-control-user"
                                       name="name"
                                       value="<?=!empty($data['name']) ? $data['name'] : ''?>"
                                       placeholder="Nhập họ tên">
                            </div>
                            <div class="col-sm-6">
                                <label  class="form-label">Nhập tài khoản</label>
                                <input type="text" class="form-control form-control-user"
                                       name="username"
                                       value="<?=!empty($data['username']) ? $data['username'] : ''?>"
                                       placeholder="Nhập tài khoản">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control form-control-user"
                                   name="password"
                                   value="<?=!empty($data['password']) ? $data['password'] : ''?>"
                                   placeholder="Mật khẩu" disabled>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control form-control-user"
                                       name="email"
                                       value="<?=!empty($data['email']) ? $data['email'] : ''?>"
                                       placeholder="Email">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control form-control-user"
                                       name="phone"
                                       value="<?=!empty($data['phone']) ? $data['phone'] : ''?>"
                                       placeholder="Phone">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

