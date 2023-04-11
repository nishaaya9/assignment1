# include<stdio.h>
int main()
{
    float r,cir;
    int l,b,rec,base,h,tri;
    printf("Enter the radius of a circle : ");
    scanf("%f",&r);
    cir=3.14*r*r;
    printf("Area of circle is %.2f\n",cir);
    printf("Enter length and widthn: ");
    scanf("%d %d",&l,&b);
    rec=l*b;
    printf("Area of rectangle is %d\n",rec);
    printf("Enter base and height : ");
    scanf("%d %d",&base,&h);
    tri=h*base/2;
    printf("Area of triangle is %d",tri);
    return 0;
}