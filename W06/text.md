```
✔<1. 새로 배운 내용>
◾ SSH서버
리눅스 서버에 직접 접속하지 않고 원격으로 접속 환경을 구축 할 수 있는 방법을 알게 되었다 -> openSSH서버
또한 SSH서버는 22번 포트를 사용한다
◾ VSCode를 이용한 깃허브 업로드
add ->바뀐 목록에 등록
commit -> 목록에 등록한 내용을 로컬 저장소에 저장
push -> 원격 저장소에 넣음
```
```
✔<2. 문제 발생+ 과정>
 ◾ git remote add origin 명령어
실습을 따라하던 중 'git remote add origin "git주소"' 부분에서 교수님과 똑같이 교수님 이메일 주소를 넣었다...
그래서 내 이메일 주소를 넣으려 했지만 fatal: remote origin already exists 라고 떠서
git remote rm origin 명령어를 이용해서 삭제해주었다.

참고 사이트: 
http://blog.naver.com/PostView.nhn
blogId=angelkim88&logNo=221565694228&parentCategoryNo=&category
No=51&viewDate=&isShowPopularPosts=false&from=postView
그러나 , 깃허브에 들어와 보니 공동작업자에 교수님과 함께 되었다....(이 부분은 미해결)
``` 
<img src="https://user-images.githubusercontent.com/53109557/95683311-70c1bb80-0c25-11eb-81e4-e47af5f6dc50.JPG" width=230 heigh =230>
```
◾VMware 창 닫음
SSH설치 후 아무생각 없이 창을 닫아서 VScode를 이용하는데 문제가 생겼었다. 그래서다시 SSH를재실행 하였고 상태 또한 확인해다.

◾잘못된 경로로 파일 작성
W6폴더 안에 파일을 작성해야하는데 다른 경로로 작성했더니 당연히 오류가 났다... 
```
<img src="https://user-images.githubusercontent.com/53109557/95683535-e2e6d000-0c26-11eb-948e-5e4bf849a550.JPG"  width=300 heigh =100>
 ```
  --------------------------------------------------------------------------------------------------------------------------------------------
 ✔ 수정내용
  1. 수정과 삭제를 위해 회원번호를 검색할 때, 해당 번호가 없을 시 오류메시지 출력
  2. 규칙성과 가독성 좋게 하기 위해서 메뉴 부분에 회원번호 검색을 따로 페이지를 만들어서 관리
  3. 수정 및 삭제 후 index페이지로 돌아가는 것이 아니라 다시 회원번호 검색하는 부분으로 돌아갈 수 있게 구성
```

```
✔<4. 회고>
+) VScode 안에서 태그를 자동으로 닫아주는 기능을 설치했더니 매우 편리했다. 또한 코드작성 후 가독성 좋게 하기 위해서는 'Ctrl+Alt+F'
-) 공동작업자 이거 어떻게 삭제하는지 모르겠다....교수님....help....도와주세요
!) 이해안갔던 부분을 살펴보니 3,4주차에 이해를 완벽하게 하지 않고 넘어갔던 부분이었다 복습,,,!
```
```
❤영상 링크 https://youtu.be/NA9L-Wle-7k
```
