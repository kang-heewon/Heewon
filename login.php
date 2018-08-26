<article class="col-md-9 bg-white">
    <h1>로그인</h1>
    <form method="post" class="d-block m-auto w-75 py-5">
        <input type="hidden" id="<?= $this->security->get_csrf_token_name() ?>" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" />
        <div class="form-group">
            <label for="input-username">사용자 이름 · 이메일</label>
            <input type="text" class="form-control" name="username" placeholder="사용자 이름 · 이메일" id="input-username">
        </div>
        <div class="form-group">
            <label for="input-pw">비밀번호</label>
            <input type="password" class="form-control" name="passwd" placeholder="비밀번호" id="input-pw">
        </div>
				<div class="text-right">
	        <button type="submit" class="btn btn-primary text-white px-5">로그인</button>
	        <a href="/user/register" class="btn btn-white">회원가입</a>
				</div>
    </form>
</article>
