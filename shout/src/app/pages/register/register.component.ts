import { Component, OnInit } from '@angular/core';
<<<<<<< HEAD
import { FormGroup, FormControl, NgForm, Validators, FormBuilder} from '@angular/forms'
import { faLock } from '@fortawesome/free-solid-svg-icons';

import { User } from 'src/app/models/user';


=======
import { NgForm } from '@angular/forms';
import { User } from 'src/app/models/user';
import { UserService } from 'src/app/services/user.service';
>>>>>>> 1ce23d41b7ef1611cb20d4592a6f8386b20cca69

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})

export class RegisterComponent implements OnInit {
<<<<<<< HEAD
  signupForm:FormGroup;
  firstname:string="";
    lastname:string="";
    gender:string="";
    // dob:Date=;
    email:string="";
    password:string="";
    phone:string="";
    city:string="";
    submitted=false;
    form:any;
  
  imagePath = "assets/shouts/login.png"

    

  ngOnInit(): void {
  }
  constructor(private formBuilder:FormBuilder){
    this.signupForm=formBuilder.group({
      firstname: new FormControl('',[Validators.required,Validators.minLength(3)]),
    lastname: new FormControl('',[Validators.required, ]),
    email:new FormControl('',[Validators.email,Validators.required]),
    password: new FormControl('',[Validators.required, Validators.maxLength(15)]),
    gender: new FormControl('',[Validators.required]),
    phone: new FormControl('',[Validators.required]),
    city: new FormControl('',[Validators.required]),
    // dob: new FormControl('',[Validators.required])
    })
=======
  user = new User();
  constructor(private userService: UserService) { }

  ngOnInit(): void {
  }
  register(userForm: NgForm){
    this.user.name = userForm.value.name;
    this.user.email = userForm.value.email;
    this.user.dob = userForm.value.dob;
    this.user.password = userForm.value.password;
    this.user.gender = userForm.value.gender;
    this.user.city = userForm.value.city;
    this.user.phone = userForm.value.phone;
    this.userService.registerUser(this.user).subscribe(res => {
      console.log(res);
    })

    console.log(this.user);
>>>>>>> 1ce23d41b7ef1611cb20d4592a6f8386b20cca69
  }

  onSubmit() {
    this.submitted=true;
    console.log(this.signupForm.value);
  }
  
  get PostData(){
    return this.signupForm.controls;}
}

