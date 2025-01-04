$(document).ready(function () {
    $('.delete').click(function () {
        if (confirm('Bạn có muốn bản ghi này không?')) {
            var id = $(this).data('id');
            let $form = $("<form>", {
                method: "post",
                action: "/admin/user/delete" // URL bạn muốn gửi form đến
            });
            $form.append($("<input>", {
                type: "hidden",
                name: "user_id",
                value: id // Dữ liệu mẫu
            }));
            $("body").append($form);
            $form.submit();
        } else {
            console.log('Không xóa user');
        }
    });
});