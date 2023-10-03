#!/usr/bin/env python
# coding: utf-8

# In[2]:


import pandas as pd


# In[4]:


import os
os.getcwd()


# In[24]:


os.chdir('C:\\Users\\LENOVO\\Downloads\\AdventureWorks+CSV+Files') 


# In[26]:


cus=pd.read_csv('AdventureWorks_Customers.csv',encoding = "latin1") 


# In[29]:


pd.read_csv('AdventureWorks_Calendar.csv') 


# In[33]:


prod=pd.read_csv('AdventureWorks_Product_Categories.csv') 


# In[34]:


prod


# In[ ]:





# In[36]:


sub=pd.read_csv('AdventureWorks_Product_SubCategories.csv') 


# In[37]:


sub


# In[38]:


s1=pd.read_csv('AdventureWorks_Sales_2015.csv') 


# In[39]:


s1


# In[40]:


s2=pd.read_csv('AdventureWorks_Sales_2016.csv') 


# In[41]:


s2


# In[42]:


s3=pd.read_csv('AdventureWorks_Sales_2017.csv') 


# In[43]:


s3


# In[44]:


output=pd.concat([s1,s2,s3])


# In[45]:


output


# In[46]:


te=pd.read_csv('AdventureWorks_Territories.csv') 


# In[66]:


output5=pd.merge(output,te,left_on='TerritoryKey',right_on='SalesTerritoryKey')


# In[51]:


te


# In[67]:


output5


# In[58]:


pr=pd.read_csv('AdventureWorks_Products.csv')


# In[59]:


pr


# In[61]:


output2=pd.merge(sub,prod,left_on='ProductCategoryKey' ,right_on = 'ProductCategoryKey')


# In[62]:


output2


# In[64]:


output3=pd.merge(output2,pr, left_on='ProductSubcategoryKey',right_on='ProductSubcategoryKey')


# In[65]:


output3


# In[70]:


output4=pd.merge(output5,output3)


# In[71]:


output4


# In[72]:


len(pd.merge(output5,output3))

