import { Component, OnInit } from '@angular/core';
import { FormBuilder } from '@angular/forms';
import { PostService } from 'src/app/services/post.service';
import { UserService } from 'src/app/services/user.service';

@Component({
  selector: 'app-feed',
  templateUrl: './feed.component.html',
  styleUrls: ['./feed.component.scss']
})
export class FeedComponent implements OnInit {

  image:any;
  id:any;
  constructor(private postService:PostService,private userService:UserService) {
    
   }

  ngOnInit(): void {
    
}
onPost(){
    this.postService.postFeed(this.image).subscribe(res => {
      this.image = res;
      console.log(this.image);
      alert("user registered..")

  })
}


}
