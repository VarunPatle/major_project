import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './includes/header/header.component';
import { FooterComponent } from './includes/footer/footer.component';
import { MainComponent } from './pages/main/main.component';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { FormsModule } from '@angular/forms';
import { ReactiveFormsModule } from '@angular/forms';
import { ForgotPasswordComponent } from './pages/forgot-password/forgot-password.component';
import { LoginComponent } from './pages/login/login.component';
import { ContactUsComponent } from './pages/contact-us/contact-us.component';
import { RegisterComponent } from './pages/register/register.component';
<<<<<<< HEAD
import { HomeComponent } from './home/home.component';
import { LogoutComponent } from './pages/logout/logout.component';
=======
import { UsersComponent } from './pages/users/users.component';
>>>>>>> 1ce23d41b7ef1611cb20d4592a6f8386b20cca69
import { HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    MainComponent,
    ForgotPasswordComponent,
    LoginComponent,
    ContactUsComponent,
    RegisterComponent,
<<<<<<< HEAD
    HomeComponent,
    LogoutComponent,
=======
    UsersComponent,
>>>>>>> 1ce23d41b7ef1611cb20d4592a6f8386b20cca69
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FontAwesomeModule,
    FormsModule,
<<<<<<< HEAD
    HttpClientModule,
    ReactiveFormsModule
    
=======
    HttpClientModule
>>>>>>> 1ce23d41b7ef1611cb20d4592a6f8386b20cca69
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
