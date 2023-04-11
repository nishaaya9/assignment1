//showing differences between Structure and Union  

#include <stdio.h>  
#include <string.h>  

// declaring structure  
struct struct_employee 
{  
    int age;  
    int salary;  
    char name[20];  
};  
// declaraing union  
union union_employee  
{  
    int age;  
    int salary;  
    char name[20];  
};  
int main()  
{  
    // creating variable for structure and initializing values   
    struct struct_employee stru ={20, 15000, "tom"};  
      
    // creating variable for union and initializing values  
    union union_employee uni = {21, 16000, "jerry"};  
             
    printf("data of structure:\n age: %d\n salary: %d\n name: %s\n", stru.age, stru.salary, stru.name);  
    printf("\ndata of union:\n age: %d\n" "salary: %d\n name: %s\n", uni.age, uni.salary, uni.name);  
    
    printf("\nAccessing all members at a time:");   
    stru.age = 23;  
    stru.salary = 75000;  
    strcpy(stru.name, "janu");  
    printf("\ndata of structure:\n age: %d\n " "salary: %d\n name: %s\n", stru.age, stru.salary, stru.name);  
      
    uni.age = 24;  
    uni.salary = 75000;  
    strcpy(uni.name, "kanu");  
    printf("\ndata of union:\n integeer: %d\n " "salary: %d\n name: %s\n", uni.age, uni.salary, uni.name);  
      
    printf("\nAccessing one member at a time:");  
    printf("\ndata of structure:");  
    stru.age = 25;  
    stru.salary = 15000;  
    strcpy(stru.name, "tanu");  
      
    printf("\nage: %d", stru.age);  
    printf("\nsalary: %d", stru.salary);  
    printf("\nname: %s", stru.name);  
      
    printf("\ndata of union:");  
    uni.age = 26;  
    uni.salary = 15000;  
    strcpy(uni.name, "manu");  
      
    printf("\nage: %d", uni.age);  
    printf("\nsalary: %d", uni.salary);  
    printf("\nname: %s", uni.name);  
        
    printf("\nAltering a member value:\n");  
    stru.age = 30;  
    printf("data of structure:\n age: %d\n salary: %d\n name: %s\n", stru.age, stru.salary, stru.name);  
    uni.age = 30;  
    printf("data of union:\n age: %d\n salary: %d\n name: %s\n", uni.age, uni.salary, uni.name);   
      
    printf("\nsizeof structure: %d\n", sizeof(stru));  
    printf("sizeof union: %d\n", sizeof(uni));  

    return 0;
}  