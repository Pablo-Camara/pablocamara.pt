function toggleClassFromChildren (element, childrenTagNames, oldClass, newClass, extraOptions) {
    var totalReplaces = 0;
    for (var x = 0; x < childrenTagNames.length; x++) {
      var childrenToChange = element.getElementsByTagName(childrenTagNames[x]);
      for (var i = 0; i < childrenToChange.length; i++) {
        if (!childrenToChange[i].classList.contains(oldClass)) {
          continue;
        }
        childrenToChange[i].classList.replace(oldClass, newClass);
        totalReplaces++;
      }
    }
    return totalReplaces;
  };

  function callbackOnChildrenWithClass (element, childrenTagNames, className, callback) {
      var totalAdded = 0;
      for (var x = 0; x < childrenTagNames.length; x++) {
          var childrenToChange = element.getElementsByTagName(childrenTagNames[x]);
          for (var i = 0; i < childrenToChange.length; i++) {
              if (!childrenToChange[i].classList.contains(className)) {
                  continue;
              }
              callback(childrenToChange[i]);
              totalAdded++;
          }
      }
      return totalAdded;
  }
