
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User Create</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <td>
                            <input style="width: 80%" type="text" name="id">
                            @error('id')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>
                            <select name="category" id="category">
                                <option value="">Option</option>
                                <option value="Quản lý nhân sự">Quản lý nhân sự</option>
                                <option value="Quản lý dịch vụ">Quản lý dịch vụ</option>
                                <option value="Quản lý hệ thống">Quản lý hệ thống</option>
                                <option value="Quản lý phòng">Quản lý phòng</option>
                                <option value="Lễ tân">Lễ tân</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>
                            <input style="width: 80%" type="text" name="name">
                            @error('name')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Birthday</th>
                        <td>
                            <input style="width: 80%" type="date" name="birthday">
                            @error('birthday')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Sex</th>
                        <td>
{{--                            <input type="radio" name="Male">Male<br>--}}
{{--                            <input type="radio" name="Female">Female<br>--}}
                            <select name="sex" id="sex">
                                <option value="">Option</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>
                            <input style="width: 80%" type="text" name="phone">
                            @error('phone')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>CMND</th>
                        <td>
                            <input style="width: 80%" type="text" name="cmnd">
                            @error('cmnd')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            <input style="width: 80%" type="text" name="email">
                            @error('email')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>
                            <input style="width: 80%" type="text" name="address">
                            @error('address')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <a href="{{route('users.list')}}"><button style="background-color: red" type="button" class="text-white">Back</button></a>
                        <button class="text-dark" style="background-color: yellow" onclick="confirm('Are you sure ???')" type="reset">Reset</button>
                        <button class="text-white" style="background-color: mediumseagreen" type="submit">Add User</button>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
