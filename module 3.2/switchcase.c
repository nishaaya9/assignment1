#include<stdio.h>
int main()
{
     
        
    int day;
    
        printf("\n1.Monday");
        printf("\n2.Tuesday");
        printf("\n3.Wednesday");
        printf("\n4.Thursday");
        printf("\n5.Friday");
        printf("\n6.Saturday");
        printf("\n7.Sunday");
        while (day!=8)
        {
        printf("\nEnter your choice:");
        scanf("%d",&day);
       
        switch(day)
        {
            case 1:
                printf("Monday");
                break;
            case 2:
                printf("Tuesday");
                break;
            case 3:
                printf("Wednesday");
                break;
            case 4:
                printf("Thursday");
                break;
            case 5:
                printf("Friday");
                break;
            case 6:
                printf("Saturday");
                break;
            case 7:
                printf("Sunday");
                break;
            case 8:
                printf("Exit");
                break;    
            default :
                printf("invalid number");
        }
        }
    return 0;
}