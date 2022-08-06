### **INSTALLATION NOTES**

1. `git clone https://github.com/throwexceptions/pictureworks_test.git`
2. Setup `.env` for PASSWORD and DATABASE
3. Run migration
4. Run tinker `User::factory(10)->create()`

### **RUN TEST (PEST PHP)**

`php artisan test`

### **DOCUMENTATION**

#### **ROUTES**
Contains 2 resources with only on controller

#### **CONTROLLER**
HomeController - contains index(), show(), update()

#### **REQUEST VALIDATION**
Validation on the params.
Custom validation for password

#### **MODEL**
User Model - used for CRUD, Factory and Migration
