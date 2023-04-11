//WAP to take two Array input from user and sort them in ascending or descending order as per user’s choice

#include<stdio.h>
int main()
{
    int arr[5],i,j,tem,choice;
    printf("enter elements : ");
    for ( i = 0; i < 5; i++)
    {
        scanf("%d",&arr[i]);
    }
    printf("\npress 1 for ascending order ");
    printf("\npress 2 for descending order \n");

    printf("\nEnter your choice : ");
    scanf("%d",&choice);

    switch (choice)
    {
    case 1:
    for ( i = 0; i < 5; i++)
    {
        for ( j =i+1; j <5; j++)
        {
           if(arr[i]>arr[j])
           {
            tem=arr[i];
            arr[i]=arr[j];
            arr[j]=tem;
           }
        }
        
    }
    printf("ascending order : ");
    for ( i = 0; i < 5; i++)
    {
        printf("%d ",arr[i]);
    }

    break;
    case 2:
    for ( i = 0; i < 5; i++)
    {
        for ( j =i+1; j <5; j++)
        {
           if(arr[i]<arr[j])
           {
            tem=arr[i];
            arr[i]=arr[j];
            arr[j]=tem;
           }
        }
        
    }
    printf("\ndescending order : ");
    for ( i = 0; i < 5; i++)
    {
        printf("%d ",arr[i]);
    }
    break;

    default:
        printf("invalid number");
        break;
    }
    
return 0;
}