<article class="col-md-9 bg-white">
    <h1>회원가입</h1>
    <form method="post" class="d-block py-4">
        <input type="hidden" id="<?= $this->security->get_csrf_token_name() ?>" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" />
        <?php if (!empty(validation_errors())) { ?>
        <div class="alert alert-danger">
          <h4 class="py-1 b"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> 문제 발생!</h4>
          <hr class="hrsep">
          <ul class="m-0">
            <?php echo validation_errors('<li>', '</li>'); ?>
          </ul>
        </div>
      <?php }?>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label text-center">이메일</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="이메일...">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label text-center">사용자 이름 </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="사용자 이름...">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label text-center">비밀번호</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="비밀번호...">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label text-center">비밀번호 재확인</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="passwordvf" placeholder="비밀번호 재확인...">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-secondary btn-lg text-white"><i class="fa fa-arrow-right" aria-hidden="true"></i> 회원가입</button>
            </div>
        </div>
    </form>
</article>
