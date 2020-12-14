
1. 새로 배운내용
```
MongoDB는 NoSQL로 분류되는 크로스 플랫폼 도큐먼트 지향 데이터베이스 시스템이다. 
MySQL 처럼 전통적인 테이블-관계 기반의 RDBMS가 아니며 SQL을 사용하지 않는다.

```

2. 문제가 발생하거나 고민한 내용 + 해결 과정
```
설치 과정에서 오타가 발생한것을 제외하고는 오류 발생이 없었다.

```

3. 참고 내용
```
db.size.insertMany([{user_id:'1', red:'apple', size:'small'},
{user_id:'2', yellow:'banana', size:'middle'},
{user_id:'3', green:'grape', size:'small'}])   -> 삽입


db.size.find({},{_id:false})

db.size.find({user_id:'1'},{_id:false}) -> 조회

db.size.updateOne({user_id:'1'},{$set:{size:'big'}}) -> 수정


db.size.find({user_id:'1'},{_id:false}) -> 조회

db.size.deleteOne({user_id:'1'}) -> 삭제

db.size.find({user_id:'1'},{_id:false}) -> 조회
```

4. 회고
```
+) 이번 수업을 통해 또 다른 새로운 환경에서 실습할 수 있어서 흥미로웠다
-) 기존 DB와 달리 sql문을 사용하지 않아서 버벅거렸다
!) 나는 내가 과제를 한줄 알았다...그런데 뭔일인가...제출하고 있지 않았다니ㅠㅠ
```
**영상 링크***:https://youtu.be/ZWLxWSe0QRU
