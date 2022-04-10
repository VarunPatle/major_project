import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormControl } from '@angular/forms';
import { PostService } from 'src/app/services/post.service';
import { UserService } from 'src/app/services/user.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-feed',
  templateUrl: './feed.component.html',
  styleUrls: ['./feed.component.scss']
})
export class FeedComponent implements OnInit {

  files:any
  fileToUpload : any;
  imagePath = 'http://127.0.0.1:8000/public/images/';
  imagePath1 = "../../../assets/shouts/upload.png" ;
  
  constructor(private postService: PostService, private userService: UserService, private formBuilder: FormBuilder) {

  }

  ngOnInit(): void {
    // var user = JSON.parse(sessionStorage.user);
    // this.id = user.id;
    
  }
  handleFileInput(event:any){
    this.fileToUpload =event.target.files[0];
    console.log(this.fileToUpload)
    const reader = new FileReader();
    reader.onload =(event:any) =>{
      this.imagePath1 =event.target.result;
    }
    reader.readAsDataURL(this.fileToUpload);
  }
  onSubmit(description:any,image:any){
    this.postService.postFeed(description.value,this.fileToUpload).subscribe(
      data =>{
        console.log(data);
        description.value = null;
        image.value =null;
        
      }
    )
  }

 // onFileSelect(event:any) {
    //if (event.target.files.length > 0) {
  //  this.file = event.target.files[0];
     // console.log(image);
   //  }
//   onSubmit(data:any) {
//     const details ={
//       id : this.id,
//       description :this.description,
//       image : this.image
//     }
//     console.log(this.uploadForm.value)
//     let formdata = new FormData();
//     formdata.append('image', this.file);
//     formdata.append('description', this.description);
//     formdata.append('user_id', this.id);
// console.log(formdata)
//     this.postService.postFeed(details).subscribe(res =>{
//       this.res
//       console.log(this.res)
//     });
    //this.router.navigate(["post"]);
  // }

//onFileChange(event: any) {
    //console.log(event)
  // this.file=event.target.files[0];
//     // console.log(this.files)
//     // const reader = new FileReader();
//     // if (event.target.files && event.target.files.length) {
//     // const [file] = event.target.files;
//     //       reader.readAsDataURL(file);
//     //       reader.onload = () => {
//     //       this.imagePath = reader.result as string; 
//     //       this.postsForm.patchValue({

//     //       fileSource: reader.result

//     //     });
// };
//}
}



