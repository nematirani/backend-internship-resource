def add_values(list1, list2, list3):
    total = map(lambda list1, list2, list3:list1 + list2 + list3, list1, list2, list3)
    return total


nums1 = [1, 2, 3]
nums2 = [4, 5, 6]
nums3 = [7, 8, 9]
print(add_values(nums1, nums2, nums3))
# Expected Result: [12, 15, 18]
