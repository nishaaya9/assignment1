# include<stdio.h>
int main()
{
    int n,i,max,a[100];
    printf("enter array size : ");
    scanf("%d",&n);
    printf("enter numbers : ");
    for(i=0;i<n;i++)
    {
        scanf("%d",&a[i]);
    }
    max=a[0];  
    for ( i = 1; i <n; i++)
    {
        if (max<a[i])
        {
           max=a[i];
        }
        
    }
    printf("Max number is %d",max); 
    
    return 0;
}