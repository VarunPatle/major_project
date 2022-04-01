import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, NgForm, Validators, FormBuilder} from '@angular/forms'
import { faLock } from '@fortawesome/free-solid-svg-icons';

import { User } from 'src/app/models/user';



@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})

export class RegisterComponent implements OnInit {
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
  }

  onSubmit() {
    this.submitted=true;
    console.log(this.signupForm.value);
  }
  
  get PostData(){
    return this.signupForm.controls;}
}

